import React from "react";
import ReactDOM from "react-dom/client";
import { observer } from "mobx-react-lite";
import { InputGroup, Button } from "@blueprintjs/core"; // Tambahkan Button
let myHTML = ""; // Deklarasikan variabel untuk menyimpan HTML

import "@blueprintjs/core/lib/css/blueprint.css";

import { PolotnoContainer, SidePanelWrap, WorkspaceWrap } from "polotno";

import { Workspace } from "polotno/canvas/workspace";
import { SidePanel } from "polotno/side-panel";
import { Toolbar } from "polotno/toolbar/toolbar";
import { ZoomButtons } from "polotno/toolbar/zoom-buttons";
import { createStore } from "polotno/model/store";
import { getImageSize } from "polotno/utils/image";
import { DownloadButton } from "polotno/toolbar/download-button"; // Tambahkan impor DownloadButton

import {
  TextSection,
  ElementsSection,
  UploadSection,
  BackgroundSection,
  SizeSection,
} from "polotno/side-panel";

import { SectionTab } from "polotno/side-panel";
import { ImagesGrid } from "polotno/side-panel/images-grid";
// import our own icon
import MdPhotoLibrary from "@meronex/icons/md/MdPhotoLibrary";

const store = createStore({
  key: "nFA5H9elEytDyPyvKL7T",
  showCredit: true,
});
const page = store.addPage();

store.addPage();
store.activePage.addElement({
  type: "text",
  text: "hello",
});

const ActionControls1 = ({ store }) => {
  return (
    <div>
      <Button
        intent="secondary"
        onClick={() => {
          alert(
            "1. Buat Desain Anda\n" +
              "2. Jika Sudah Klik Download\n" +
              "3. Kemudian Klik Next\n" +
              "4. Upload Hasil Desain Dan File Mentahannya\n" +
              "5. Setelah itu akan diminta mengunggah file Hasil Desain Dan File Mentahannya"
          );
        }}
      >
        Tutorial
      </Button>
      <DownloadButton store={store} />
      <Button
        intent="primary"
        onClick={() => {
          window.open(
            "https://www.youtube.com/watch?v=mwpwPwWIueM&pp=ygUXZG9nIHNuaWZmaW5nIG1pY3JvcGhvbmU%3D",
            "_blank"
          );
        }}
      >
        Next
      </Button>
    </div>
  );
};

export const PhotosPanel = observer(({ store }) => {
  const [images, setImages] = React.useState([]);

  async function loadImages() {
    setImages([]);
    await new Promise((resolve) => setTimeout(resolve, 3000));

    setImages([
      { url: "" },
      { url: "" },
    ]);
  }

  React.useEffect(() => {
    loadImages();
  }, []);

  return (
    <div style={{ height: "100%", display: "flex", flexDirection: "column" }}>
      <InputGroup
        leftIcon="search"
        placeholder="Search..."
        onChange={(e) => {
          loadImages();
        }}
        style={{
          marginBottom: "20px",
        }}
      />
      <p>Gambar Media </p>
      <ImagesGrid
        images={images}
        getPreview={(image) => image.url}
        onSelect={async (image, pos) => {
          const { width, height } = await getImageSize(image.url);
          store.activePage.addElement({
            type: "image",
            src: image.url,
            width,
            height,
            x: pos ? pos.x : store.width / 2 - width / 2,
            y: pos ? pos.y : store.height / 2 - height / 2,
          });
        }}
        rowsNumber={2}
        isLoading={!images.length}
        loadMore={false}
      />
    </div>
  );
});

const CustomPhotos = {
  name: "photos",
  Tab: (props) => (
    <SectionTab name="Photos" {...props}>
      <MdPhotoLibrary />
    </SectionTab>
  ),
  Panel: PhotosPanel,
};

const sections = [
  TextSection,
  CustomPhotos,
  ElementsSection,
  UploadSection,
  BackgroundSection,
  SizeSection,
];

export const App = () => {
  return (
    <PolotnoContainer
      className="polotno-app-container"
      style={{ width: "100vw", height: "100vh" }}
    >
      <SidePanelWrap>
        <SidePanel store={store} sections={sections} defaultSection="photos" />
      </SidePanelWrap>
      <WorkspaceWrap>
        <Toolbar
          store={store}
          components={{
            ActionControls: ActionControls1,
          }}
        />
        <Workspace store={store} />
        <ZoomButtons store={store} />
      </WorkspaceWrap>
    </PolotnoContainer>
  );
};

export const createEditor = ({ container }) => {
  const root = ReactDOM.createRoot(container);
  root.render(<App store={store} />);
};

window.createEditor = createEditor;
